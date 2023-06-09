const mysql = require('mysql2/promise');
const config = require('../config');

async function query(sql, params) {
    const connection = await mysql.createConnection(config.db);
    const [rows, ] = await connection.execute(sql, params);

    return rows;
}

module.exports = {
    query
}