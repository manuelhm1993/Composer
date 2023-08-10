// ---------------------- Resuelve la ruta absoluta de la salida
const path = require('path');

module.exports = {
  mode: 'development',
  entry: './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', // ---------------------- Ruta de archivo a compilar
  output: {
    filename: 'bootstrap.bundle.min.js',
    path: path.resolve(__dirname, 'public/assets/js'), // ---------------------- Ruta de archivo compilado
  },
};