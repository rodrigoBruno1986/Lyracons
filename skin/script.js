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
    let liItem = `<li><a href="${item.url}">${item.titulo}</a></li>`
    itemsContainer += liItem;
});

$('.menuJSON').append(itemsContainer);

$('.inicio-btn').click(function () {
    $('.contenido').toggleClass('hidden');
});

$('.compras-btn').mouseover(function () {
    $('.aside').addClass('hover');
}).mouseout(function () {
    $('.aside').removeClass('hover');
});

$('.nosotros-btn').click(function () {
    $('.aside-placeholder').text('Hola Mundo!');
})
