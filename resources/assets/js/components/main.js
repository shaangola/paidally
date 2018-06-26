import React, { Component } from 'react';
import ReactDOM from 'react-dom';
 
/* Main Component */
class Main extends Component {
 
  constructor() {
   
    super();
    //Initialize the state in the constructor
    this.state = {
        users: [],
    }
  }
  /*componentDidMount() is a lifecycle method
   * that gets called after the component is rendered
   */
  componentDidMount() {
    /* fetch API in action */
    fetch('/api/v1/getUserList')
        .then(response => {
            return response.json();
        })
        .then(response=> {
            let users= response.user_list
            //Fetched product is stored in the state
            this.setState({users});
        });
  }
 
 renderProducts() {
    return this.state.users.map((product) => {
        return (
            /* When using list you need to specify a key
             * attribute that is unique for each list item
            */
            <li key={product.name}>
                { product.email } 
            </li>      
        );
    })
  }
   
  render() {
   /* Some css code has been removed for brevity */
    return (
        <div>
              <ul>
                { this.renderProducts() }
              </ul> 
            </div> 
       
    );
  }
}
 
export default Main;
 
/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
*/
 
if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}