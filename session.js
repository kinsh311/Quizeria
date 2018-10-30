<script>
        var tc=0;
       var IsTH=0;
          var idd=['r1','r2','r3','r4','r5','r6','r7','r8','r9','r10','r11','r12','r13','r14','r15','r16','r17','r18','r19','r20','r21','r22','r23','r24','r25','r26','r27','r28','r29','r30','r31'];
            var did=['r1','r2','r3','r4','r5','r6','r7','r8','r9','r10','r11','r12','r13','r14','r15','r16','r17','r18','r19','r20','r21','r22','r23','r24','r25','r26','r27','r28','r29','r30','r31'];
     
        //to remove
        
        Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}
//to remove end
        function month(m){
            
            if(IsTH==1)
                {
                    var j=0;
                    for(j=0;j<tc;j++)
                    did[j].remove();
                    nextmonth(m);    
                }
            
            
         if(IsTH==0){
            tah = document.createElement("TR");
                                tah.setAttribute("id", "tah");
            document.getElementById("table").appendChild(tah);
            
             var oneone = document.createElement("TH");
             var oneoned = document.createTextNode("S No.");
                                oneone.appendChild(oneoned);
                                document.getElementById("tah").appendChild(oneone);
           var oneone = document.createElement("TH");
             var oneoned = document.createTextNode("Date");
                                oneone.appendChild(oneoned);
                                document.getElementById("tah").appendChild(oneone);
           var oneone = document.createElement("TH");
             var oneoned = document.createTextNode("Day");
                                oneone.appendChild(oneoned);
                                document.getElementById("tah").appendChild(oneone);
           var oneone = document.createElement("TH");
             var oneoned = document.createTextNode("Department");
                                oneone.appendChild(oneoned);
                                document.getElementById("tah").appendChild(oneone);
            var oneone = document.createElement("TH");
             var oneoned = document.createTextNode("Description");
                                oneone.appendChild(oneoned);
                                document.getElementById("tah").appendChild(oneone);
             IsTH=1;
             nextmonth(m);
         }
           }
  function nextmonth(m){         
       
if(m==1){
    
    
       for(i=0;i<31;i++){ 
       
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jan[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jan[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jan[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jan[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jan[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if
      
        } // for end
if(m==2){
      tc=0;    
            
       for(i=0;i<28;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(feb[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(feb[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(feb[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(feb[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(feb[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if
         
        } // for end 
if(m==3){ 
    tc=0;
       for(i=0;i<31;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(mar[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(mar[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(mar[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(mar[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(mar[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if
           
        } // for end        
if(m==4){ 
   tc=0;
       for(i=0;i<30;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(apr[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(apr[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(apr[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(apr[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(apr[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if
         
        } // for end                              
if(m==5){ 
   tc=0;
       for(i=0;i<31;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(may[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(may[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(may[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(may[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(may[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
    tc=tc+1;
       } //month end if
           
        } // for end    
if(m==6){ 
   tc=0;
       for(i=0;i<30;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jun[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jun[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jun[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jun[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jun[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
    tc=tc+1;
       } //month end if
           
        } // for end    
if(m==7){ 
   tc=0;
       for(i=0;i<31;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jul[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jul[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jul[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jul[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(jul[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if
          
        } // for end     
if(m==8){ 
    tc=0;
           for(i=0;i<31;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(aug[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(aug[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(aug[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(aug[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(aug[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
           } //month end if
           
        } // for end    
if(m==9){ 
  tc=0;
       for(i=0;i<30;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(sep[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(sep[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(sep[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(sep[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(sep[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if

        } // for end    
if(m==10){
   tc=0;
       for(i=0;i<31;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(oct[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(oct[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(oct[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(oct[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(oct[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
tc=tc+1;
       } //month end     
        } // for end    
if(m==11){  
   tc=0;
       for(i=0;i<30;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(nov[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(nov[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(nov[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(nov[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(nov[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
       tc=tc+1;
       } //month end if
         
        } // for end    
if(m==12){
    tc=0;
 
       for(i=0;i<31;i++){ 
         
     did[i] = document.createElement("TR");
                                did[i].setAttribute("id", idd[i]);
            document.getElementById("table").appendChild(did[i]);
            
             var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(der[i]['bid']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(der[i]['date']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(der[i]['day']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(der[i]['dept']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
           var oneone = document.createElement("TD");
             var oneoned = document.createTextNode(der[i]['description']);
                                oneone.appendChild(oneoned);
                                document.getElementById(idd[i]).appendChild(oneone);
tc=tc+1;
       } //month end if
        
        } // for end    
    
        
 
 
        } //month func end
  
  
    </script>