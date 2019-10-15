//this is a Function Based component
import React, { Component } from 'react';
import propTypes from 'prop-types';

export class TodoItem extends Component {
    //Methods go here
    getStyle = () =>{
        return{
            textDecoration: this.props.todo.completed ? 'line-through' : 'none',
            background: 'aliceblue',
            borderBottom: '1px #ccc dotted',
            margin: '1em',
        }
    }

    //Render on the screen
    render() {
        //Deconstructor: pull out variables from object
        const { id, title } = this.props.todo;

        return (
            <div style = {this.getStyle()}>
                <p>
                    <input type='checkbox' checked={this.props.todo.completed} onChange={this.props.toggleComplete.bind(this, id)}/> {' '}
                    {title} <span style={date}>added on {this.props.todo.added_on}</span>
                    <button style={btnDelStyle} onClick={this.props.deleteTodo.bind(this, id)}>Delete</button>
                </p>
            </div>
        )
    }
}

//Styles
const btnDelStyle = {
    background: '#ff0000',
    color: '#fff',
    border: 'none',
    padding: '5px 10px',
    borderRadius: '10%',
    float: 'right'
}

const date = {
    fontSize: 'small',
    marginLeft: '2em',
    fontStyle: 'italic'
}

//Proptypes
TodoItem.propTypes = {
    todo: propTypes.object.isRequired
}

export default TodoItem
