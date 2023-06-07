let scroll_pos = 0;
const icon = document.getElementsByClassName('navbar-link')
const main = document.getElementById('main')
const sidebar = document.querySelector('.sidebar')

console.log(main)
main.addEventListener('scroll', function(){
  if(main.scrollTop > scroll_pos && window.innerWidth <= 1000){
    sidebar.style.transform = 'translateY(110%)';
    scroll_pos = main.scrollTop
  }else if(main.scrollTop < scroll_pos && window.innerWidth <= 1000){
    sidebar.style.transform = 'translateY(0%)';
    scroll_pos = main.scrollTop
  }
})


icon[1].addEventListener('mouseover', function(){
  this.firstElementChild.firstChild.src = 'img/icon/book-open-primary.svg';
})

icon[1].addEventListener('mouseout', function(){
  this.firstElementChild.firstChild.src = 'img/icon/book-open.svg';
})


icon[0].addEventListener('mouseover', function(){
  this.firstElementChild.firstChild.src = 'users-primary.svg';
})

icon[0].addEventListener('mouseout', function(){
  this.firstElementChild.firstChild.src = 'users.svg';
})


icon[2].addEventListener('mouseover', function(){
  this.firstElementChild.firstChild.src = 'img/icon/book-primary.svg';
})

icon[2].addEventListener('mouseout', function(){
  this.firstElementChild.firstChild.src = 'img/icon/book.svg';
})
