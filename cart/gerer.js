
const product= [
    {
        id:0,
        image: 'image/banane.jpg',
        title: 'Banane malace au poisson',
        price: 120,
    },
    {
        id:1,
        image: 'image/kok.jpg',
        title: 'Kok au manioc ',
        price: 100,
    },
    {
        id:2,
        image: 'image/bongo.jpg',
        title: 'Nbongo thobi Douala',
        price: 150,
    },
    {
        id:4,
        image: 'image/dolet.jpg',
        title: 'Ndole du cameroun',
        price: 190,
    },
    {
        id: 5,
        image: 'image/eru.jpg',
        title: 'Bon eru de Bamenda',
        price: 120,
    },
];

const cathegories= [...new set(product.map((items) =>{
    return items;
}))]
let i=0; 
document.getElementById('root').innerHTML = cathegories.map((items)=>{
    var {image, title, price} = items;
    return(
       ` <div class="box">
            <div class='img-box'>
                <img class='images' src=${image}>
            </div>
        
        <div class='bottom'>
            <p>${title}</p>
            <h2>${price}.00</h2>`+
            "<button onclick='addtocart("+(i++)+")'>add to cart</button>"+
        `</div>
        </div>`
        
    )
}).join('');

var cart = [];

function addtocart(a){
    cart.push({...cathegories[a]});
    displacart();
}

function delElement(a){
    cart.splice(a, 1);
    displacart();
}

function displacart(a){
    let j = 0, total=0; 
    document.getElementById("count").innerHTML=cart.length; 
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "your cart is empty";
        document.getElementById("total").innerHTML = "$"+0+".00";
    }else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>{
            var {image, title, price} = items;
            total = total+price;
            document.getElementById("total").innerHTML = "$"+total+".00";
            return(
                `<div class='cart-item'>
                    <div class='row-img>
                        <img class='rowimg' src=${image}>
                    </div>
                    <p style='font-size:12px; '>${title}</p>
                    <h2 style='font-size: 15px;'>${price}.00</h2>`+
                    "<i class='fas fa-trash' onclick='delElement("+(j++)+")'></i></div>"
            );
        }).join('');
    }
}