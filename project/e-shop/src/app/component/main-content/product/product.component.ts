import { Component, OnInit } from '@angular/core';
import { ProductModel } from 'src/app/models/product.model';
import { ProductService } from 'src/app/services/product.service';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})
export class ProductComponent implements OnInit {
  productList: ProductModel[] = [];
  mouseIndex = -1;
  constructor(private productService: ProductService) { }

  ngOnInit(): void {
    this.productService.getProductsPaging(1, 10).subscribe(data=>{
      this.productList = data;
    })
  }
  test(){
    console.log(123)
  }
}
