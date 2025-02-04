
const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeTogggler = document.querySelector(".theme-toogler")

menuBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'none';
})

// changer theme

themeTogggler.addEventListener('click', () =>{
    document.body.classList.toggle('dark-theme-variables');

    themeTogggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeTogggler.querySelector('span:nth-child(2)').classList.toggle('active');
})

orders.forEach(order =>{
    const tr = document.createElement('tr');
    const trContent = `<td>${order.productName}</td>
                        <td>${order.productNumber}</td>
                        <td>${order.paymentStatus}</td>
                        <td class="${order.shipping === 'Declined' ? 'danger' : order.shipping === 'pending' ? 'warning' : 'primary'}">${order.shipping}</td>
                        <td class="primary">Details</td>`;

        tr.innerHTML = trContent;
        document.querySelector('table tbody').appendChild(tr);
})
