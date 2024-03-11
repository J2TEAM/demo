const qc = document.getElementById("qc");

const img = document.createElement("img");
img.src = "./img/demo.gif";
img.alt = "demo";
img.loading = "lazy";

qc.before(img);
qc.remove();
