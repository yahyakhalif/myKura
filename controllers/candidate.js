const Candidate= require("../models/candidate");

exports.addcandidate = async (req, res) => {
  try {
    const candidate= await Candidate.create(req.body);
    res.json({ status: "ok", candidate});
  } catch (error) {
    console.log(error);
    res.json({ status: "error", error });
  }
};

exports.vote = async (req, res) => {
  try {
    const candidate = await Candidate.findOneAndUpdate(
      { _id: req.params.id },
      { $inc: { "votes": 1 } },
      { new: true },      
    );
    res.json({ status: "ok", candidate});
  } catch (error) {
    console.log(error);
    res.json({ status: "error", error });
  }
};
