const nodemailer = require("nodemailer");

let transporter = nodemailer.createTransport({
  service: "gmail",
  auth: {
    user: "nelakurthivaralakshmi@gmail.com",
    pass: "varamegha0831",
  },
});

let mailOptions = {
  from: "nelakurthivaralakshmi@gmail.com",
  to: "nelakurthivaralakshmi2003@gmail.com
  subject: "Order Confirmation",
  text: "Hello, your order has been completed successfully! Thank you for your purchase.",
};

transporter.sendMail(mailOptions, function (error, info) {
  if (error) {
    console.log(error);
  } else {
    console.log("Email sent: " + info.response);
  }
});
