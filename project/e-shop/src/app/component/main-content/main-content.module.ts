import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { AdvertiseComponent } from './advertise/advertise.component';
import { MainContentRoutingModule } from './main-content-router.module';
import { MainContentComponent } from './main-content.component';
import { PartnerComponent } from './partner/partner.component';
import { ProductComponent } from './product/product.component';
import { SlideShowComponent } from './slide-show/slide-show.component';


@NgModule({
  declarations: [
    SlideShowComponent,
    AdvertiseComponent,
    ProductComponent,
    PartnerComponent,
    MainContentComponent,
  ],
  imports: [
    CommonModule,
    MainContentRoutingModule
  ]
})
export class MainContentModule { }
