//this is a Function Based component
import React from 'react';
import { Link } from 'react-router-dom';

export default function Header() {
    return (
        <header style={headerStyling}>
            <h1>All your Todos</h1>
            <Link style={linkStyles} to='/'>Home</Link> | <Link style={linkStyles} to='/about'>Information</Link>
        </header>
    )
}

//Styling 
const headerStyling = {
    textAlign: 'center',
    background: 'darkslategray',
    color: 'white'
}

const linkStyles = {
    color: 'white'
}
