
var title = document.querySelector('#h1') 
// selects html element with the ID "h1" using document.querySelector() method.
var button = document.querySelector('#btn1')
var gmail = document.querySelector('a')


button.addEventListener('click',function()
{
    console.log("you clicked the button");
    title.style.backgroundColor='red'
    button.style.backgroundColor='blue'
});

var listParent = document.querySelector("ul")
listParent.addEventListener('click',function(){

    console.log("you clicked the ul");
   listParent.style.backgroundColor='green';

})

var listItems = document.querySelectorAll('li');
console.log('listItems',listItems);
for(var i=0; i< listItems.length;i++){
    listItems[i].addEventListener('click',function(){

        this.style.color='white';
    })
}

gmail.addEventListener('click',function(e){

    console.log(e.target);
    e.preventDefault()

    console.log("when you click gmail color changes");
   
        gmail.style.color='green';
})