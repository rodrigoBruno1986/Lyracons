const JSON = {
    submenu: [
        {
            titulo: 'Ropa',
            url: './ropa.html'
        },
        {
            titulo: 'Electronica',
            url: './electronica.html'
        },
        {
            titulo: 'Higiene',
            url: './higiene.html'
        },
        {
            titulo: 'Alimentos',
            url: './alimentos.html'
        },
        {
            titulo: 'Otros',
            url: './otros.html'
        }
    ]
};

let itemsContainer = '';

JSON.submenu.forEach(item => {
    let liItem = `<a class="dropdown-item" href="${item.url}">${item.titulo}</a>`
    itemsContainer += liItem;
});

$('.dropdown-menu').append(itemsContainer);

$('.inicio-btn').click(function () {
    $('.contenido').toggleClass('hidden');
});

$('.compras-btn').mouseover(function () {
    $('.aside ul').addClass('hover');
}).mouseout(function () {
    $('.aside ul').removeClass('hover');
});

$('.nosotros-btn').click(function () {
    $('.aside-placeholder').text('Hola Mundo!');
})
