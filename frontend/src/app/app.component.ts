import { Component } from '@angular/core';
import { AuthService } from './services/auth.service';
import { Router } from '@angular/router';
import { TokenService } from './services/token.service';
import { JarwisService } from './services/jarwis.service';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  public loggedIn: boolean;
  productAddedToCart: any;
  cartcount: any;
  restailor: Object;
  resshop: Object;
// public alerts: Array<Alert>=[];

// message="";
  constructor(
    private Auth: AuthService,
    private router: Router,
    private Jarwis: JarwisService,
    private Token: TokenService
  ) { }
  public response:any;
  public res:any;
  ngOnInit() {
    this.Auth.authStatus.subscribe(value => this.loggedIn = value);
    this.displaycatshop()
    this.displaytailor()
    this.displaycattailor()
    this.productAddedToCart=this.Jarwis.getproductFromCart();
    this.cartcount=this.productAddedToCart.length;
    //console.log(this.cartcount);
    //console.log(this.productAddedToCart.length);
  }
  
displaycatshop(){
 this.Jarwis.catshop().subscribe(
   data=>{
   //console.log(data);
   this.resshop = data;
  // this.shop=this.responses.shop;
  console.log(this.resshop);
 })
 
}
displaycattailor(){
  this.Jarwis.tailorcat().subscribe(
    data=>{
    //console.log(data);
    this.restailor = data;
   // this.shop=this.responses.shop;
   console.log(this.restailor);
  })
  
 }
displaytailor(){
  // this.response = this.Jarwis.det;
  // console.log(this.response);
  this.Jarwis.catid().subscribe(data=>{
    //console.log(data);
    this.res = data;
      console.log(this.res);
  //  console.log(this.res.tailor.current_page);
  //  console.log(this.res.tailor.per_page);
  })
  
}
  logout(event: MouseEvent) {
    event.preventDefault();
    this.Token.remove();
    this.Auth.changeAuthStatus(false);
    this.router.navigateByUrl('/');
  }
}
// export interface Alert{
// id:number;
// type:string;
// message:string;
// }
