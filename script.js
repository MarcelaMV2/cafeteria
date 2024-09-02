const cbxProducto = document.getElementById('producto')
cbxProducto.addEventListener('change', getSubcategoria)

const cbxSubcategoria = document.getElementById('subcategoria')

function fetchAndSetData(url,formData, targetElement){
    return fetch(url,{
        method: "POST",
        body: formData,
        mode: 'cors'
    })
    .then(response => response.json())
    .then(data=>{
        targetElement.innerHTML = data
    })
    .catch(err => console.log(err))
}

function getSubcategoria(){
    let producto = cbxProducto.value 
    let url = 'getSubcategoria.php'
    let formData = new FormData()
    formData.append('id_prod',producto)

    fetchAndSetData(url, formData, cbxSubcategoria)
}


function fetchPrice(id_sub) {
    if (id_sub === "") {
        document.getElementById("precio").value = "";
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("precio").value = this.responseText;
        }
    };
    xhr.open("GET", "getPrecio.php?id=" + id_sub, true);
    xhr.send();
}