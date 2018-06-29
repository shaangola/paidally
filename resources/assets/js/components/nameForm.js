import React, { Component } from 'react';


class NameForm extends React.Component {
    constructor(props) {
      super(props);
      this.state = {value: ''};
  
      this.handleChange = this.handleChange.bind(this);
      this.handleSubmit = this.handleSubmit.bind(this);
      this.onSubmit=this.handleSubmit.bind(this);
    }
  
    handleChange(event) {
      this.setState({value: event.target.value});
    }
  
    handleSubmit(e) {
      var data = new FormData();
      const payload = {
    Username:self.state.value,
    password: self.state.value

    };
      data.append("myjsonkey", JSON.stringify(payload));

      fetch('/api/v1/login', {
          method: 'POST',
          body: data
      })
    }
    handleClick(){
      localStorage.clear();
    }
  
    render() {
      return (
        <div>
          <p>Hello Welcome !!</p>
          <div onClick={this.handleClick}>Logout</div>
        </div>
      );
    }
  }
  export default NameForm;