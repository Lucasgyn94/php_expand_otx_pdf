module.exports = {
    proxy: "localhost:8080/expansaOfx/back-end/public/", // Proxy para a pasta public do back-end
    files: [
        "./back-end/public/**/*.php", 
        "./back-end/templates/**/*.php", 
        "./back-end/src/**/*.php",  
        "./front-end/src/**/*.{html,css,js}" // Monitora arquivos HTML, CSS e JS no front-end
    ]
};