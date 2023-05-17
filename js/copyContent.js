                                ///////////////////////////////////////
                                function copyContent(elementId) {
                                    const element = document.getElementById(elementId);
                                    element.select();
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges();
                                }
