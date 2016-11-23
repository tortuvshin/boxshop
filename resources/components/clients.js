import { Router, Route, IndexRoute, browserHistory } from 'react-router';
import App from './app/App';
import NotFound from './app/errors/NotFound';
import React from 'react';
import ReactDOM from 'react-dom';

const app = document.getElementById('app');

ReactDOM.render(
  <Router history={browserHistory}>
    <Route path="/" component={App}>
      <IndexRoute
        getComponent={(location, callback) => {
          require.ensure([], function (require) {
            callback(null, require('./app/native/NativeSearch').default);
          });
        }}
      />
      <Route
        path="search"
        getComponent={(location, callback) => {
          require.ensure([], function (require) {
            callback(null, require('./app/native/SearchResult').default);
          });
        }}
      />
      <Route name="404" path="*" component={NotFound} />
    </Route>
  </Router>,
app);