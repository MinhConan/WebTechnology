import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-slide-show',
  templateUrl: './slide-show.component.html',
  styleUrls: ['./slide-show.component.css'],
})
export class SlideShowComponent implements OnInit {
  constructor() {}

  slideIndex = 1;
  
  ngOnInit(): void {
    this.showSlides(this.slideIndex);
    let slides = Array.from(document.getElementsByClassName('mySlides') as HTMLCollectionOf<HTMLElement>)
    setInterval(e=>{
      this.slideIndex++;
      if(this.slideIndex > slides.length) this.slideIndex = 1;
      this.showSlides(this.slideIndex);
    }, 5000)
  }

  plusSlides(n) {
    this.showSlides((this.slideIndex += n));
  }

  currentSlide(n) {
    this.showSlides((this.slideIndex = n));
  }

  showSlides(n) {
    let i;
    let slides = Array.from(document.getElementsByClassName('mySlides') as HTMLCollectionOf<HTMLElement>)
    let dots = document.getElementsByClassName('dot');
    if (n > slides.length) {
      this.slideIndex = 1;
    }
    if (n < 1) {
      this.slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(' active', '');
    }
    slides[this.slideIndex - 1].style.display = 'block';
    dots[this.slideIndex - 1].className += ' active';
  }
}
