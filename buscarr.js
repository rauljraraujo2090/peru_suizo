const products = [
    {
      productName: "Ofimatica e Internet",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://image.jimcdn.com/app/cms/image/transf/dimension=661x10000:format=jpg/path/scd2a3c6c729b883c/image/i5336f198f54d3612/version/1542718740/image.jpg",
    },
    {
      productName: "Diseño Grafico Publicitario",
      descripcion: "Nunca dejes de aprender, atrevete ahora",
      img: "https://einatec.com/wp-content/uploads/2019/02/diseno-grafico-publicitario.jpg",
    },
    {
      productName: "Gestion de Base de Datos MYSQL",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://desarrolloweb.com/storage/tag_images/actual/Dz1aCoaslzsDu3WFE5XBrzHI7C4XmcLg9a579paC.png",
    },
    {
      productName: "Diseño de Paginas Web",
      descripcion: "Nunca  dejes de aprender atrevete",
      img: "https://www.comunicare.es/wp-content/uploads/2021/10/diseno-web-marketing-digital-cordoba-3.jpg",
    },

    {
      productName: "Gestion y Administración de Base de Datos Acces y SQL",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://bookdown.org/paranedagarcia/database/images/database.jpg",
    },

    {
      productName: "Lenguaje de Programación",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://i.blogs.es/389033/programming/1366_2000.jpg",
    },


    {
      productName: "Ensamblage, reparación de Computadoras y redes",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://systematic.edu.pe/archivos/curso-ensamblaje-y-mantenimiento-de-computadoras.jpg",
    },



    {
      productName: "Edición de audio y video ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://intercompras.com/blog/wp-content/uploads/2023/07/null-26.jpeg",
    },



    {
      productName: "Las tic aplicadas al proceso de enseñanza - aprendizaje ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://www.ilerna.es/blog/wp-content/uploads/2020/04/tic-en-la-educaci%C3%B3n-infantil.jpg",
    },



    {
      productName: "Informatica Administrativa y aplicación de las tics en la gestión Institucional",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://cdn.www.gob.pe/uploads/document/file/4146786/standard_Inacal%20aprob%C3%B3%20Norma%20T%C3%A9cnica%20Peruana%20para%20la%20implementaci%C3%B3n%20de%20las%20TIC%20en%20las%20organizaciones%20.jpeg",
    },



    {
      productName: "Android y programación de aplicaciones para celulares ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://www.ngeeks.com/wp-content/uploads/2015/04/android-developers.png",
    },

    {
      productName: "Informática y estadistica aplicada al mejoramiento continuo",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://iinscom.com/wp-content/uploads/2021/10/7-herramientas-de-control-estadistico.jpg",
    },



    {
      productName: "Aulas de innovación pedagógica y soporte técnico de computadoras ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://andreavaldivieso.edu.pe/wp-content/uploads/2018/05/Curso-de-Capacitaci%C3%B3n-2.jpg",
    },

    {
      productName: "Docencia digital e innovación tecnológica en la educación ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://images.theconversation.com/files/502439/original/file-20221221-15-rseen2.jpg?ixlib=rb-4.1.0&rect=0%2C0%2C5463%2C3620&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip",
    },



    {
      productName: "Tic, administración de aulas de innovación pedagógica y plataformas virtuales ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://cedhex.com/wp-content/uploads/2024/05/1500x844-tic-educacion-posgrado.jpg",
    },

    {
      productName: "Innovación Pedagógica, Recursos Tecnológicos y Ciberdocencia   ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://0701.static.prezi.com/preview/v2/l6a4hkdihki5ntoxon66m7zt5l6jc3sachvcdoaizecfr3dnitcq_3_0.png",
    },


  ];
  const shopContent = document.getElementById("shopContent");
  const searchInput = document.getElementById("searchInput");
  const noResults = document.getElementById("noResults");
  
  const displayProducts = (productList) => {
    shopContent.innerHTML = "";
  
    if (productList.length === 0) {
      noResults.style.display = "block";
    } else {
      productList.forEach((product) => {
        const content = document.createElement("div");
        content.className = "card-products";
        content.innerHTML = `



        <div class="card" style="width: 20rem;height:25rem; margin-top:20px !important;">
<img class="card-img-top" src="${product.img}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">${product.productName}</h5>
  <p class="card-text">${product.descripcion}</p>
  <a href="#" class="btn btn-primary">Curso Gratuito </a>
</div>
</div>



           
            `;
        shopContent.append(content);
      });
      noResults.style.display = "none";
    }
  };
  
  const handleSearch = () => {
    const searchTerm = searchInput.value.toLowerCase();
    const filteredProducts = products.filter((product) => product.productName.toLowerCase().startsWith(searchTerm));
  
    displayProducts(filteredProducts);
  };
  
  displayProducts(products);
  
  searchInput.addEventListener("input", handleSearch)