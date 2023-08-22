function solve() {
    let p = document.getElementById("principle").value;
    let r = document.getElementById("rate").value;
    let n = document.getElementById("time").value;

    let i = p * r * n / 100;

    document.getElementById('interest').value = i;
}

function cls() {
    document.getElementById('interest').value = "";
    document.getElementById('principle').value = "";
    document.getElementById('rate').value = "";
    document.getElementById('time').value = "";
}
