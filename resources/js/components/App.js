import React from 'react';
import ReactDOM from 'react-dom';
import Navigation from "./Navigation/Navigation";
import Container from "./Container/Container";


export default function App() {
    return (
        <div className="container-fluid">
            <Navigation></Navigation>
            <Container></Container>
        </div>
    );
}


ReactDOM.render(<App />, document.getElementById('app'));

