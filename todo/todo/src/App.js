import React, {Component} from 'react';
import Todos from './Components/Todos/Todos';
import Header from './Components/Layout/Header'; 
import AddTodo from './Components/Todos/AddTodo';
import About from './Components/Pages/About';
import {BrowserRouter as Router, Route} from 'react-router-dom';
import axios from 'axios';
import './App.css';

class App extends Component {

  state = {
    todos: []
  }

  getBiggestId = () => {
    var big_id = 0;
    this.state.todos.map(function(obj){     
      if (obj.id > big_id) big_id = obj.id;    
    });
    big_id++;
    return big_id;
  }

  toggleComplete = (id) => {
    this.setState({ todos: this.state.todos.map( todo => {
      if(todo.id === id){
        todo.completed = !todo.completed;
      }
      return todo;
    })  });
  }

  deleteTodo = (id) => {
    //omdat het een FAKE API is, enkel de state aanpassen ipv een HTTP Request
    // axios.delete('https://my-json-server.typicode.com/yensdefraeye/1920pop-API-yensdefraeye/todos/' + id)
    //   .then((res) => {
    //     this.setState({todos: [...this.state.todos.filter(todo => todo.id !== id )]});
    //   }); 
    this.setState({todos: [...this.state.todos.filter(todo => todo.id !== id )]});
  }

  addTodo = (name) => {
    axios.post('https://my-json-server.typicode.com/yensdefraeye/1920pop-API-yensdefraeye/todos', { 
      title: name,
      completed: false,
      added_on : this.getTodaysDate()
    })
      .then((res) => {
        res.data.id = this.getBiggestId();
        this.setState({todos: [ ...this.state.todos, res.data]})        
      });
  }

  //Fetch the Todos from API
  async fetchTodos(){
    axios.get('https://my-json-server.typicode.com/yensdefraeye/1920pop-API-yensdefraeye/todos')
      .then((res) => {
        this.setState({todos : res.data})
      }); 
  }

  getTodaysDate = () => {
    var date = new Date().getDate() + '/' + (new Date().getUTCMonth() + 1) + '/' + new Date().getFullYear();
    return date;
  }

  //Runs after mount
  componentDidMount() {
    this.fetchTodos();
  }

  //Render on the screen
  render() {
    return (
      <Router>
        <div classtodo="App" style={globalStyling}>
          <Header/>
          <Route exact path='/' render={props => (
            <React.Fragment>
              <Todos todos = {this.state.todos} 
                toggleComplete = {this.toggleComplete}
                deleteTodo = {this.deleteTodo}
              />
              <AddTodo addTodo = {this.addTodo}/>

            </React.Fragment>
          )}/>
          <Route path='/about' component={About}/>
        </div>
      </Router>
    );
  }
}

  //Styles
  const globalStyling = {
    width: '50%',
    margin: '0 auto'
  }

export default App;
