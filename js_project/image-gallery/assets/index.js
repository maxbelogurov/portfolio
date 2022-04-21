const gallery = document.querySelector('.gallery');
function createImg(arr) {
    for (let key in arr) {
        const img = document.createElement('img');
        img.classList.add('image')
        img.src = arr[key].urls.regular;
        img.alt = arr[key].alt_description;
        gallery.append(img);
    }
}
let searchWord = 'milk';
let url;
async function getData() {
    url = url = `https://api.unsplash.com/search/photos?per_page=18&orientation=landscape&query=${searchWord}&client_id=c7HMxCz8Ck0s958Es5dsz5TGwUUf08yag9rHjHZeMWk`;
    const res = await fetch(url);
    const data = await res.json();
    createImg(data.results)
}
getData();
const input = document.getElementById('img-search');
input.addEventListener('search', () => {
    gallery.innerHTML = '';
    searchWord = input.value;
    getData();
});
document.querySelector('.icon-close').addEventListener('click', () => {
    input.value = '';
})
input.focus();