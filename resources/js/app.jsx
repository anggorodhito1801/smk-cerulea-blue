import React from 'react';
import ReactDOM from 'react-dom/client';

function App() {
    return (
        <div className="container">
            <h1>Halo dari React!</h1>
            <p>Aplikasi ini sudah pakai Laravel + React + Vite!</p>
        </div>
    );
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
