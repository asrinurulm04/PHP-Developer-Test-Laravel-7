
    const postsList = document.querySelector('.post-list');
    const addPostForm = document.getElementById('form');
    const titleProduk = document.getElementById('title-produk');
    const titleHarga = document.getElementById('title-harga');
    const titleType = document.getElementById('title-type');
    const titleStok = document.getElementById('title-stok');
    const btnSubmit = document.querySelector('.btn');
    let output = '';

    const renderPosts = (posts) =>{
      posts.forEach(post => {
        output +=`
          <div class="card mt-3 col-md-3 bg-light">
            <div class="card-body" data-id=${post.id}>
              <h5 class="card-title">${post.nama_produk}</h5>
              <p class="card-harga">${post.harga}</p>
              <p class="card-stok">${post.stok}</p>
              <p class="card-type">${post.type_produk}</p>
              <a href="#" class="card-link btn btn-warning" id="edit-post">Edit</a>
              <a href="#" class="card-link btn btn-danger" id="delete-post">Delete</a>
            </div>
          </div>
        `;
      });
      postsList.innerHTML = output;
    }

    postsList.addEventListener('click', (e) => {
      e.preventDefault();
      let delButtonIsPressed = e.target.id == 'delete-post';
      let editButtonIsPressed = e.target.id == 'edit-post';
      let id = e.target.parentElement.dataset.id;

      // Delete - Remove
      // Method:DELETE
      if(delButtonIsPressed){
        
      e.preventDefault();
        fetch('http://localhost:8000/api/delete/'+e.target.parentElement.dataset.id,{
          method: 'DELETE'
        })
          .then(res => res.json())
          .then(() => location.reload())
      }

      if(editButtonIsPressed){
        const parent = e.target.parentElement;
        let titleContent = parent.querySelector('.card-title').textContent;
        let hargaContent = parent.querySelector('.card-harga').textContent;
        let stokContent = parent.querySelector('.card-stok').textContent;
        let typeContent = parent.querySelector('.card-type').textContent;

        titleProduk.value = titleContent;
        titleHarga.value = hargaContent;
        titleStok.value = stokContent;
        titleType.value = typeContent;
      }
      
      // Edit - Update
      // Method:PUT
      btnSubmit.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('http://localhost:8000/api/update/'+id,{
          method: 'PUT',
          headers: {
            'Content-type': 'application/json; charset=UTF-8',
          },
          body: JSON.stringify({
            nama_produk: titleProduk.value,
            harga: titleHarga.value,
            type_produk: titleType.value,
            stok: titleStok.value,
          }),
         })
.          then(res => res.json())
          .then(() => location.reload())
      })
    })

    const url = 'http://localhost:8000/api/bootcamp';
    //get - Read The post
    //method:get
    fetch(url)
    .then(res => res.json())
    .then(data => {  
    // This returns a full array object of data
    data.forEach(post => {
      output +=
        `<div class="card mt-3 col-md-3 bg-ligt">
          <div class="card-body" data-id=${post.id}>
            <h5 class="card-title">${post.nama_produk}</h5>
            <p class="card-harga">${post.harga}</p>
              <p class="card-stok">${post.stok}</p>
              <p class="card-type">${post.type_produk}</p>
              <a href="#" class="card-link btn btn-warning" id="edit-post">Edit</a>
              <a href="#" class="card-link btn btn-danger" id="delete-post">Delete</a>
          </div>
        </div>`;
    });
      postsList.innerHTML = output;
    });

    // Create - Insert
    // Method:POST
    const url_post = 'http://localhost:8000/api/add';
    addPostForm.addEventListener('submit', (e) => {
      e.preventDefault();
        //console.log(titleProduk.value);
        fetch(url_post, {
          method: 'POST',
          headers: {
              'Content-type': 'application/json; charset=UTF-8',
          },
          body: JSON.stringify({
            nama_produk: titleProduk.value,
            harga: titleHarga.value,
            type_produk: titleType.value,
            stok: titleStok.value,
          }),
        })
        .then(res => res.json())
        .then(data => {
          const dataArr = [];
          dataArr.push(data);
          renderPosts(dataArr);
        })

        // reset input
        titleProduk.value = '';
        titleHarga.value = '';
        titleType.value = '';
        titleStok.value = '';
    });