function sendMail(){
    var params = {
        name:document.getElementById("name").value,
        email:document.getElementById("email").value,
        phone:document.getElementById("phone").value,
        message:document.getElementById("message").value,
    };

const  serviceID ="service_b1bt1or";
const templateID ="template_9928oag";

emailjs
    .send(serviceID,templateID,params)
    .then((res) =>{
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("We will reply you soon");
    })
    //.catch((err) => console.log(err));
}