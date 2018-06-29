import React, { Component } from 'react';
import "../css/Flip.css";
import Login from './Login';
class FlipBox extends React.Component {
    constructor(props) {
      super(props);
      this.state = {value: ''};
    }
  
  
    render() {
      return (
        <div className="flip-container">
          <div className="flipper">
            <div className="front">
              front of card
            </div>
            <div className="back">
              <Login/>
            </div>
          </div>
        </div>
      );
    }
  }
  export default FlipBox;