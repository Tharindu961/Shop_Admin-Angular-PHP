import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, NgForm } from '@angular/forms';
import { first } from 'rxjs/operators';
import { Router } from '@angular/router';
import { ApiService } from '../api.service';
import { Users } from '../users';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  users: Users[];
  baseUrl:string = "http://localhost/shopnew/backend";
  constructor(private httpClient : HttpClient) { }

  ngOnInit() {
   this.displayUser();
  }
 displayUser() {
    this.httpClient.get<any>(this.baseUrl + '/dashboard.php').subscribe(
      response => {
        this.users = response;
        console.log(this.users);
      }
    );
    return this.users;
  }
}
