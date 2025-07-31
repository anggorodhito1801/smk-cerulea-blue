// resources/js/app.jsx
import React from 'react';
import ReactDOM from 'react-dom/client';

const App = () => {
  return <h5>Halo dari React! Aplikasi Laravel + React berhasil terkoneksi</h5>;
};

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
