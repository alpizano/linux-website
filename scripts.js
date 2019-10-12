//var data = '[ { "name": "Aragorn", "race": "Human" }, {"name": "Gimli", "race": "Dwarf"} ]'

// parse out the JSON data
//data = JSON.parse(data);

//console.log(data[1].name)


const app = document.getElementById('root')
console.log(app)

const logo = document.createElement('img')
logo.src = 'logo.png'

const container = document.createElement('div')
container.setAttribute('class', 'container')

app.appendChild(logo)
app.appendChild(container)

const url = 'https://ghibliapi.herokuapp.com/films'


fetch(url)
.then(response => {
return response.json()
})

.then(data => {
// Work with JSON data here
console.log(data)
//console.log(data.length)
//data.forEach(movie => {
    for( i=0; i<=data.length; i++) {
    
    // Create a div with a card class
    const card = document.createElement('div')
    card.setAttribute('class', 'card')

    // Create an h1 and set the text content to the film's title
    const h1 = document.createElement('h1')
    //h1.textContent = movie.title
    h1.textContent = data[i].title

    // Create a p and set the text content to the film's description
    const p = document.createElement('p')
    //movie.description = movie.description.substring(0,300) // Limit to 300 chars
    data[i].description = data[i].description.substring(0,300) // Limit to 300 chars


   //p.textContent = `${movie.description}...` // End with an ellipses
   p.textContent = `${data[i].description}...` // End with an ellipses

    // Append the cards to the container element
    container.appendChild(card)

    // Each card will contain an h1 and a p
    card.appendChild(h1)
    card.appendChild(p)
//})
    }

})
.catch(err => {
// Do something for an error here
})



