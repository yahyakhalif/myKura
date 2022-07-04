const express = require("express");
const router = express.Router();


const {
  addpost,
  
} = require("../controllers/post");

router.route("/addpost").post(addpost);

module.exports = router;