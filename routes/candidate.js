const express = require("express");
const router = express.Router();


const {
  addcandidate,
  vote
  
} = require("../controllers/candidate");

router.route("/addcandidate").post(addcandidate);
router.route("/vote/:id").get(vote);

module.exports = router;