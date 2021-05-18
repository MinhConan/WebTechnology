import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MainContentComponent } from './component/main-content/main-content.component';

const routes: Routes = [
  {
    path:'',
    pathMatch: 'full',
    redirectTo: 'trang-chu'
  },
  {
    path:'trang-chu',
    loadChildren: () => import('./component/main-content/main-content.module').then(m => m.MainContentModule)
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
