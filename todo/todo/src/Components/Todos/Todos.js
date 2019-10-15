import React, {Component} from 'react';
import TodoItem from './TodoItem'
import propTypes from 'prop-types';

class Todos extends Component {
    //Methods go here
    

    //Render on the screen
    render() {
        return this.props.todos.map((todo) => ( 
            <TodoItem key = {todo.id} todo = {todo} 
            toggleComplete={this.props.toggleComplete}
            deleteTodo={this.props.deleteTodo}
            />
        ));
  }
}

//Proptypes
Todos.propTypes = {
    todos: propTypes.array.isRequired
}

export default Todos;
 