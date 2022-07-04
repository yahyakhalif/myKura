const mongoose = require("mongoose");

const CandidateSchema = new mongoose.Schema(
  {
    fullname: {
      type: String,
      
    },
   
    post: {
      type: Object,
      required: [true,"Post is Required"]
    },

    votes: {
        type: Number,
        default: 0,
    },
   
  },
  { timestamps: true },
  { collecton: "candidate" }
);


const model = mongoose.model("Candidate", CandidateSchema);

module.exports = model;