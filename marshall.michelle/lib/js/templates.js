
const listItemTemplate = templater(o => `


<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">

     <figure class="figure product">
                <img src="img/${o.thumbnail}" alt="">
                    <figcaption>
                        <div>${o.name}</div>
                        <div>&dollar;${o.price}</div>
                    </figcaption>
        </figure>


</a>
`);