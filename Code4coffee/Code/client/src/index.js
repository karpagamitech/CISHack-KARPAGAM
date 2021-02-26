import React from "react";
import ReactDOM from "react-dom";
import "./index.css";
import App from "./App";
import 'bootstrap/dist/css/bootstrap.min.css';

import {Route ,Switch ,BrowserRouter as Router} from "react-router-dom";
import Dashboard from "./dashboard";

const routing = (
    <Router>
    <Switch>
    <Route exact path="/" component={App}/>
    <Route path="/dashboard" component={Dashboard}/>
    </Switch>
  </Router>
);

ReactDOM.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>,
    document.getElementById("root")
);
