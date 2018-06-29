import React, { Component } from 'react';
import {BrowserRouter, Route} from 'react-router-dom';


class Menu extends React.Component {
    constructor(props) {
      super(props);
      this.state = {value: ''};
    }
  
  
    render() {
      return (
        <BrowserRouter>
          <Route path="/login" Component={Login} />
        </BrowserRouter>
      );
    }
  }
  export default Menu;