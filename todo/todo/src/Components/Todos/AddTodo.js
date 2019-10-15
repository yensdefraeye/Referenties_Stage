import React, {Component} from 'react';

export class AddTodo extends Component {
    state = {
        name: ''
    }

    //set the todo with value from input
    onChange = (e) => this.setState({ name: e.target.value})

    //save Todo when Save is clicked
    onSave = (e) => {
        e.preventDefault();
        this.props.addTodo(this.state.name);
        this.setState({name: ''})
    }

    render() {
        return (
            <section style={global}>
                <form style={formStyle} onSubmit={this.onSave}>
                    <input 
                        type='text' name='name' style={inputStyle}
                        placeholder='Add a new Todo here' value={this.state.name}
                        onChange={this.onChange}
                    />
                    <input type='submit' value='Save' style={submitStyle}></input>
                </form>
            </section>            
        )
    }
}

//Stylings
const formStyle = {
    display: 'flex'
}

const submitStyle = {
    flex: '1',
    background: 'forestgreen',
    color: '#fff',
    border: 'none',
    padding: '5px 5px',
    borderRadius: '10%',
}

const inputStyle = {
    flex: '10',
    padding: '5px'
}

const global = {
    backgroundColor: 'aliceblue',
    padding: '1em'
}

export default AddTodo;