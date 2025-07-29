import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';

function App() {
        const [siswa, setSiswa] = useState([]);

    useEffect(() => {
        fetch('/api/siswa')
            .then(res => res.json())
            .then(data => setSiswa(data));
    }, []);
    return (
        <div className="container mt-5">
            <h1>Halo dari React!</h1>
            <p>Aplikasi Laravel + React berhasil terkoneksi</p>
        </div>
    );
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
