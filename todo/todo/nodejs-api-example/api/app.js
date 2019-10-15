const express = require('express');
const sqlite3 = require('sqlite3').verbose();
const bodyParser = require('body-parser');
const cors = require('cors');
const app = express();
const port = 5000;

// used to read the request body req.*
app.use(bodyParser.json());
app.use(cors());

// get all todo's from the database
app.get('/todos', function (req, res) {
        let db = new sqlite3.Database('todos.db');

        db.all('SELECT * FROM todos', function (err, rows) {
            if (err) {
                res.sendStatus(err.status);
            }
            else {
                res.send(rows);
            }
        });

        db.close();
    }
);

// get one single todo by id from the database
app.get('/todos/:id', function (req, res) {
    let db = new sqlite3.Database('todos.db');

    db.get('SELECT * FROM todos WHERE id = ?', req.params.id, function (err, row) {
        if (err) {
            res.sendStatus(err.status)
        }
        else {
            res.send(row);
        }
    });

    db.close();
});

// add a todo to the database
app.post('/todos', function (req, res) {
    let db = new sqlite3.Database('todos.db');

    db.run("INSERT INTO todos (name) VALUES (?)", req.body.todo, function (err) {
        if (err) {
            res.sendStatus(err.status);
        }
        else {
            res.sendStatus(201);
        }
    });

    db.close();
});

// update a todo in the database
app.put('/todos/:id', function (req, res) {
    let db = new sqlite3.Database('todos.db');

    db.run("UPDATE todos SET todo = ? WHERE id = ?", [req.body.todo, req.params.id], function (err) {
        if (err) {
            res.sendStatus(err.status);
        }
        else {
            res.sendStatus(200);
        }
    });

    db.close();
});

// delete specific todo from the database
app.delete('/todos/:id', function (req, res) {
    let db = new sqlite3.Database('todos.db');

    db.run("DELETE FROM todos WHERE id = ?", req.params.id, function (err) {
        if (err) {
            res.sendStatus(err.status);
        }
        else {
            res.sendStatus(200);
        }
    });

    db.close();
});

// make sure to run the app with `node app.js` command
app.listen(port, function() {
    console.log(`Example app listening on port ${port}!`)
});