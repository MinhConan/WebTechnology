import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { ProductModel } from '../models/product.model';

@Injectable({
  providedIn: 'root',
})
export class ProductService {
  product: ProductModel = {
    ID: 1,
    ProductName: 'IP12',
    Price: 35000000,
    ImageUrl: 'assets/images/IP12.jpg',
    Description: 'Chính hãng VN/A '
  };
  product2: ProductModel = {
    ID: 2,
    ProductName: 'Samsung Galaxy Note 20 Ultra 5G',
    Price: 20000000,
    ImageUrl: 'assets/images/Samsung Galaxy Note 20 Ultra 5G.jpg',
    Description: 'Chính hãng VN/A '
  };
  constructor(private http: HttpClient) {}

  getProductsPaging(pageIndex, pageSize): Observable<ProductModel[]> {
    let productList = [];
    for (let i = 0; i < pageSize; i++) {
      productList.push(i%2 == 0 ? this.product : this.product2);
    }
    return of(productList);
  }
}
