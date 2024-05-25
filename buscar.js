const products = [
    {
      productName: "Ofimatica e Internet",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fti-h5.jimdofree.com%2Fherramientas-de-ofimatica%2F&psig=AOvVaw3FV2wDyhGPNmEXWfgFgU_e&ust=1716734945509000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJj7ppyGqYYDFQAAAAAdAAAAABAEhttps://www.google.com/url?sa=i&url=https%3A%2F%2Fti-h5.jimdofree.com%2Fherramientas-de-ofimatica%2F&psig=AOvVaw3FV2wDyhGPNmEXWfgFgU_e&ust=1716734945509000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJj7ppyGqYYDFQAAAAAdAAAAABAE",
    },
    {
      productName: "Diseño Grafico Publicitario",
      descripcion: "Nunca dejes de aprender, atrevete ahora",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },
    {
      productName: "Gestion de Base de Datos MYSQL",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },
    {
      productName: "Diseño de Paginas Web",
      descripcion: "Nunca  dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },

    {
      productName: "Gestion y Administracion de Base de Datos Acces y SQL",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },

    {
      productName: "Lenguaje de Programación",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },


    {
      productName: "Ensamblage, reparación de Computadoras y redes",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },



    {
      productName: "Edición de audio y video ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },



    {
      productName: "Las tic aplicadas al proceso de enseñanza - aprendizaje ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },



    {
      productName: "Informatica Administrativa y aplicación de las tics en la gestión Institucional",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },



    {
      productName: "Android y programación de aplicaciones para celulares ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },

    {
      productName: "Informática y estadistica aplicada al mejoramiento continuo",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },



    {
      productName: "Aulas de innovación pedagógica y soporte técnico de computadoras ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },

    {
      productName: "Docencia digital e innovación tecnológica en la educación ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },



    {
      productName: "Tic, administración de aulas de innovación pedagógica y plataformas virtuales ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
    },

    {
      productName: "Innovación Pedagógica, Recursos Tecnológicos y Ciberdocencia   ",
      descripcion: "Nunca dejes de aprender atrevete",
      img: "https://img.freepik.com/vector-gratis/ilustracion-concepto-computo-escritorio-moderno_114360-12156.jpg",
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