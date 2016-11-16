<?php

namespace app\Helpers;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class File
{
    private static $default_path = 'files';

    private static $sections =
    [
        'default'          => ['path' => '', 'type' => 'all', 'valid' => '/[\.\/](.+)$/i'],
        'img'              => ['path' => 'img', 'type' => 'img', 'code' => true, 'valid' => '/[\.\/](jpe?g|png)$/i', 'maxwidth' => 2048],
        'category_img'     => ['path' => 'img/categories/image', 'type' => 'img', 'valid' => '/[\.\/](jpe?g|png)$/i', 'maxwidth' => 600, 'square' => true],
        'profile_img'      => ['path' => 'img/profile', 'type' => 'img', 'code' => true, 'valid' => '/[\.\/](jpe?g|png)$/i', 'maxwidth' => 600, 'square' => true],
        'product_img'      => ['path' => 'img/products/image', 'type' => 'img', 'code' => true, 'valid' => '/[\.\/](jpe?g|gif|png)$/i', 'maxwidth' => 600, 'square' => true],
        'product_key'      => ['path' => 'products/key_code', 'type' => 'text', 'code' => true, 'valid' => '/[\.\/](txt)$/i'],
        'product_software' => ['path' => 'products/software', 'type' => 'compact', 'code' => true, 'valid' => '/[\.\/](zip|rar)$/i'],
    ];

    private static $full_path = '';
    private $options = [];

    public function __construct($options = [])
    {
        $this->options = $options;

        return $this;
    }

    public static function __callStatic($name, array $arguments)
    {
        if ($name == 'section') {
            $file = new self();

            return $file->callableSection($arguments[0], @$arguments[1]);
        }
    }

    public function __call($name, array $arguments)
    {
        if ($name == 'section') {
            return $this->callableSection($arguments[0], @$arguments[1]);
        }
    }

    private function callableSection($section = '', $clean = false)
    {
        return $this->setting(self::$sections[$section ?: 'img'], $clean);
    }

    public function setting(array $options, $clean = false)
    {
        if (@$clean) {
            $this->options = [];
        }
        $this->options = $this->options + $options;

        return $this;
    }

    public function upload($files)
    {
        if ($files instanceof UploadedFile) {
            $many = false;
        } elseif (is_array($files)) {
            $many = true;
        } else {
            return '';
        }
        if (!$many) {
            $files = [$files];
        }
        $uploaded = [];
        foreach ($files as $file) {
            $info = (object) pathinfo(strtolower($file->getClientOriginalName()));
            $options = (object) $this->options;

            $path = [storage_path(), self::$default_path, $options->path];
            if (@$options->code && \Auth::check()) {
                $path[] = \Auth::id();
            }

            if (@$options->subpath) {
                $path[] = $options->subpath;
            }

            if ((!isset($options->valid) || preg_match($options->valid, '.'.$info->extension)) && $file->isValid()) {
                $path = implode('/', $path);

                $file_destiny = md5(time()).'.'.$info->extension;

                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }

                $return = $file->move($path, $file_destiny);

                $this->normalice("$path/$file_destiny");

                $uploaded[] = (explode(self::$default_path, str_replace('\\', '/', $return))[1]);
            } else {
                $MaxFilesize = self::formatBytes($file->getMaxFilesize());
                $uploaded[] = 'Error: '.trans('globals.file_upload_error', ['MaxFilesize' => $MaxFilesize]);
            }
        }

        return $many ? $uploaded : $uploaded[0];
    }

    public static function deleteFile($file)
    {
        $path = explode('/', $file);

        if (\Auth::id() == $path[4]) {
            $file = storage_path().'/'.self::$default_path.$file;
            unlink($file);

            return file_exists($file) ? 0 : 1;
        }

        return 0;
    }

    public function normalice($file)
    {
        $info = (object) pathinfo($file);
        $options = (object) $this->options;

        if (@$options->type == 'img') {
            $img = \Image::make($file);
            $maxwidth = @$options->maxwidth ?: null;
            $maxheight = @$options->maxheight ?: null;

            if (@$options->square) {
                $height = $img->height();
                $width = $img->width();
                $offset = floor(abs($width - $height) / 2);
                if ($height > $width) {
                    $img->crop($width, $width, 0, $offset);
                } else {
                    $img->crop($height, $height, $offset, 0);
                }
            }

            if ($maxwidth || $maxheight) {
                $img->resize($maxwidth, $maxheight, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }

            $img->save();
        }

        return $this;
    }

    public static function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = ['', 'k', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision).$suffixes[floor($base)];
    }
}
