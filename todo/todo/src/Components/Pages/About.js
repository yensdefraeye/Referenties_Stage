import React from 'react';

function About() {
    return (
        <React.Fragment>
            <h1 style={head}>Information</h1>
            <p>
                Deze pagina heeft als enige functie de React Router te implementeren.
                Om deze pagina toch van enig nut te voorzien is hier informatie over de opdracht terug te vinden.
            </p>
            <section style={sect}>
                <h2>Gebruikte technieken in deze "Proof of Concept":</h2>
                <ul style={list}>
                    <li>Components</li>
                    <li>State en State manipulation</li>
                    <li>Styling met Const</li>
                    <li>Routing</li>
                    <li>HTTP requests</li>
                </ul>
                <h3>API</h3>
                <p>
                    Voor de backend is een eigen fake API gehost op Github
                    (<a style={link} href={'https://my-json-server.typicode.com/yensdefraeye/1920pop-API-yensdefraeye/todos'}>link</a>).
                    In deze API bevinden zich standaard 3 Todo's.
                    
                </p>
            </section>
        </React.Fragment>
    )
}

const head = {
    textAlign: 'center',
}

const list = {
    listStyleType: 'none'
}

const sect = {
    marginTop: '1em'
}

const link = {
    color: 'blue'
}

export default About;
