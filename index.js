require("dotenv").config({ path: "./.env" });
const express = require('express');
const bodyParser = require("body-parser");
const mongoose = require('mongoose');

const app = express();


// const database_url = "";

// mongoose.connect(database_url);
// const db = mongoose.connection;
// db.on('error', (err)=>{
//     console.log(err);
// });
// db.once('open',()=> {
//     console.log('Database is running');
// });


const connectDB = async() => {
    await mongoose.connect(process.env.MONGOURI, {
        useNewUrlParser: true,
        useUnifiedTopology: true,
    });

    console.log('mongodb connected');
}

connectDB();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));




app.listen(process.env.PORT, ()=>{
    console.log(`app running on port ${process.env.PORT}`);
});