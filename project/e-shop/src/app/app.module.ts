import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './component/header/header.component';
import { MainHeaderComponent } from './component/main-header/main-header.component';
import { MenuTopComponent } from './component/menu-top/menu-top.component';
import { FooterComponent } from './component/footer/footer.component';
import { ToggleOnHoverDirective } from './shared/directive/toggle-on-hover.directive';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    MainHeaderComponent,
    MenuTopComponent,
    FooterComponent,
    ToggleOnHoverDirective
  ],
  imports: [
    BrowserModule,
    AppRoutingModule, 
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
