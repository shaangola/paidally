import React, { Component } from "react";
import { Button, FormGroup, FormControl, ControlLabel } from "react-bootstrap";
import "../css/Login.css"
import NameForm from './nameForm';

export default class Login extends Component {
  constructor(props) {
    super(props);
    const user =(localStorage.getItem('user') !="undefined") ? JSON.parse(localStorage.getItem('user')) : null;
    this.state = {
      email: "",
      password: "",
      isLogin:(user ==null)?false:true
    };
    
    this.handleSubmit=this.handleSubmit.bind(this);
    this.handleChange=this.handleChange.bind(this);
  }

  

 handleChange(event){

    this.setState({
        [event.target.id]: event.target.value
      });
 }

 

postData(url, data) {
  // Default options are marked with *
  return fetch(url, {
    body: JSON.stringify(data), // must match 'Content-Type' header
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, same-origin, *omit
    headers: {
      'content-type': 'application/json'
    },
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, cors, *same-origin
    redirect: 'follow', // manual, *follow, error
    referrer: 'no-referrer', // *client, no-referrer
  })
  .then(response => response.json()) // parses response to JSON
}
  handleSubmit(event) {
        event.preventDefault();
        const payload = {
        "email":this.state.email,
        "password": this.state.password

        };
        const that=this;
        this.postData('/api/v1/login', payload)
  .then(function(data){
    
    if (data.status_code=='200')
    { 
        console.log(data);
        that.setState({isLogin:true});
        localStorage.setItem('user',JSON.stringify(data.user)); 
    }
    else
    { 
        alert('login unsuccessful');
    }
  }) // JSON from `response.json()` call
  .catch(error => console.error("success",error))
        // fetch('/api/v1/login', {
        //     method: 'POST',
        //     body: payload
        // })
    
  }
  
  render() {
    return (
      
      
      <div className="Login">
            {this.state.isLogin ? (
        <NameForm />
      ) : (
        <form onSubmit={this.handleSubmit}>
          <FormGroup controlId="email" bsSize="small">
            <ControlLabel>Email</ControlLabel>
            <FormControl
              autoFocus
              type="email"
              value={this.state.email}
              onChange={this.handleChange}
            />
          </FormGroup>
          <FormGroup controlId="password" bsSize="small">
            <ControlLabel>Password</ControlLabel>
            <FormControl
              value={this.state.password}
              onChange={this.handleChange}
              type="password"
            />
          </FormGroup>
          <Button
            block
            bsSize="large"
            type="submit"
          >
            Login
          </Button>
        </form>
      )}
            
          
        
      </div>
    );
  }
}