import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';

@Component({
  selector: 'app-employeecrud',
  templateUrl: './employeecrud.component.html',
  styleUrls: ['./employeecrud.component.scss'],
})
export class EmployeecrudComponent {
  EmployeeArray: any[] = [];
  isResultLoaded = false;
  isUpdateFormActive = false;

  name: string = '';
  address: string = '';
  mobile: Number = 0;

  currentEmployeeID = '';

  constructor() {
    http: HttpClient;
  }
  ngOnInit(): void {}
}
